import telebot
import hashlib
import os

TOKEN = os.environ.get('TOKEN')
bot = telebot.TeleBot(TOKEN)

@bot.message_handler(func=lambda message: True)
def echo_all(message):
    text = message.text
    hash_md5 = hashlib.md5(text.encode('utf-8')).hexdigest()
    bot.reply_to(message, f"L'hash MD5 di '{text}' è: {hash_md5}")

bot.polling()
