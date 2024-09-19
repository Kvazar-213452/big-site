from flask import Flask, request, jsonify
from flask_cors import CORS
import telebot

app = Flask(__name__)

CORS(app, resources={r"/*": {"origins": "*", "methods": ["GET", "POST", "OPTIONS"], "allow_headers": ["Content-Type"]}})

port = 3000

TELEGRAM_BOT_TOKEN = ''
bot = telebot.TeleBot(TELEGRAM_BOT_TOKEN)

@app.route('/send_message', methods=['POST', 'OPTIONS'])
def handle_post():
    if request.method == 'OPTIONS':
        return jsonify({'message': 'Preflight request handled successfully'})

    data = request.json

    chat_id = data.get('iddiscord')
    random_number = data.get('random_number')

    print('Отримано дані:', data)

    if chat_id and random_number:
        bot.send_message(chat_id, f'Your confirmation code {random_number}. Promotion of the confirmation code is prohibited.')
        return jsonify({'message': 'POST request handled successfully'})
    else:
        return jsonify({'message': 'Invalid data'}), 400

if __name__ == '__main__':
    app.run(port=port)