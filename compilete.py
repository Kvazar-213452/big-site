import os
import subprocess

def power_shell_cd(directory, argument):
    command = f"cd {directory} ; {argument}"
    
    try:
        subprocess.Popen(["powershell", "-Command", command], shell=True)
    except Exception as e:
        print("Помилка:", e)

let = input("Type ")

if int(let) == 0:
    os.system("node-sass src/prefab/modal.scss src/css/modal.css")
    os.system("node-sass src/prefab/menu.scss src/css/menu.css")
    os.system("node-sass src/prefab/global.scss src/css/global.css")
    os.system("node-sass src/prefab/style.scss src/css/style.css")
elif int(let) == 1:
    os.system("git add -A")
    name = input("Name: ")
    os.system(f'git commit -m "{name}"')
    os.system("git push")
elif int(let) == 2:
    os.system("git pull")
elif int(let) == 3:
    power_shell_cd("microserver/discordBot", "Python main.py")
    power_shell_cd("microserver/telgram", "Python main.py")
    power_shell_cd("microserver/gmail", "Python main.py")
    power_shell_cd("microserver/translator", "Python main.py")