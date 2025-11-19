# Soal 4 :

def bilangan(angka):
    for i in range(1,angka+1):
        if i % 2 != 0:
            print(i, end=", ")

bilangan(20)