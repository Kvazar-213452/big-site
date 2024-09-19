from flask import Flask, request, jsonify
from flask_cors import CORS
import threading
import subprocess
import json

app = Flask(__name__)
CORS(app)  


def run_script():
    subprocess.run(['python', 'microserver\discordBot\discord_bot.py'])


@app.route('/send', methods=['POST'])
def send_message():
    data = request.json
    iddiscord = data.get('iddiscord')
    random_number = str(data.get('random_number', ''))

    data = [str(iddiscord), int(random_number)]

    with open('./code.json', 'w') as file:
        json.dump(data, file)

    thread = threading.Thread(target=run_script)
    thread.start()

    return jsonify({'status': 'Message received', 'iddiscord': iddiscord, 'random_number': random_number}), 200


if __name__ == '__main__':
    app.run(debug=True)