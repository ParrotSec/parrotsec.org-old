#!/usr/bin/python3
import os, fileinput, shutil

lang_array=["it", "en", "ru", "uz"]

print("Creating language directories")
os.chdir("website")
for lang in lang_array:
    os.mkdir(lang)

print("Sperating files..")
for file_name in os.listdir('.'):
    for lang in lang_array:
        if str(".php?lang={}".format(lang)) in file_name:
            shutil.move(file_name, lang)
            file_name_array = file_name.split('.')
            os.rename("{}/{}".format(lang, file_name), "{}/{}.html".format(lang, file_name_array[0]))
        else:
            if os.path.isdir(file_name):
                if not file_name in lang_array:
                    destination_path = os.path.join(lang, file_name)
                    if not os.path.exists(destination_path):
                        shutil.copytree(file_name, destination_path)

print("Cleaning directory")
os.system("rm ./*.*")
for dir_name in os.listdir('.'):
    if not dir_name in lang_array:
        shutil.rmtree(dir_name)

print("Creating index")
index_file = open("index.php", "w")
index_file.write("<?php header('location: en/') ?>")
index_file.close()


print("Updating code")
for lang in lang_array:
    os.chdir(lang)
    with fileinput.FileInput('index.html', inplace=True, backup=".bak") as file:
        for line in file:
            text_to_search = "http://localhost:8080/index.php?lang={}".format(lang)
            text_to_replace = "/{}/index.html".format(lang)
            print(line.replace(text_to_search, text_to_replace))
    os.chdir("..")
