def checkPalindrom(kataUlang):
    return kataUlang == kataUlang[::-1]

input_kata = input('Masukkan kata yang ingin di check: ')
hasil = checkPalindrom(input_kata)

if hasil:
    print(f"{input_kata}, Adalah kata Palindrom. TRUE")
else:
    print(f"{input_kata}, Buka kata Palindrom. FALSE")