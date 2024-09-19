import discord
from discord.ext import commands
import json
import sys
 
with open('./code.json', 'r') as file:
    data = json.load(file)

intents = discord.Intents.default()
intents.message_content = True

bot = commands.Bot(command_prefix='!', intents=intents)

# Подія на запуск бота
@bot.event
async def on_ready():
    print(f'Бот {bot.user.name} підключений!')

@bot.command()
async def send_message(ctx, user_id: int, *, message: str):
    try:
        user = await bot.fetch_user(user_id)
        if user:
            await user.send(message)
            await ctx.send(f"Повідомлення відправлено {user.name}!")
        else:
            await ctx.send("Користувача не знайдено.")
    except Exception as e:
        await ctx.send(f"Виникла помилка: {e}")

@bot.event
async def on_ready():
    print(f'Бот {bot.user.name} підключений!')

    user_id = int(data[0])
    message_content = data[1]

    user = await bot.fetch_user(user_id)
    if user:
        try:
            await user.send(message_content)
            print(f"Повідомлення відправлено {user.name}!")
        except Exception as e:
            print(f"Виникла помилка: {e}")
    else:
        print("Користувача не знайдено.")
    sys.exit(1) 


bot.run("")