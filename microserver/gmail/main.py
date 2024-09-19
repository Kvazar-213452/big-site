from flask import Flask, request, jsonify
from flask_cors import CORS
import smtplib
from email.mime.text import MIMEText

app = Flask(__name__)

sender = ""
password = ""

server = smtplib.SMTP("smtp.gmail.com", 587)
server.starttls()

def send_text_email(message, subject, receiver):
    try:
        server.login(sender, password)
        msg = MIMEText(message)
        msg["Subject"] = subject
        msg["From"] = sender
        msg["To"] = receiver
        server.sendmail(sender, receiver, msg.as_string())
        return "The text message was sent successfully!"
    except Exception as _ex:
        return f"Error: {_ex}"

@app.route('/send_email', methods=['POST'])
def send_email():
    data = request.json
    receiver = data.get('receiver')
    print(receiver)
    code = data.get('code')

    subject = "Notification"
    message = f"Code: {code}"

    result = send_text_email(message, subject, receiver)
    return jsonify({'status': 'success', 'message': result})

if __name__ == "__main__":
    CORS(app)
    app.run(debug=True)
