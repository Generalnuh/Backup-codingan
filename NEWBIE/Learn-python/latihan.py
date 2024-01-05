print('''
    *******************************
    ini adalah kalkulator sederhana
    tekan (-) untuk Pembagian
    tekan (+) untuk Pertambahan
    tekan (x) untuk Perkalian
    tekan (:) untuk Pembagian    
    *******************************
      ''')
num1 = int(input('Masukkan angka pertama: '))
operatorMTK = str(input('Pilih Operator: '))
num2 = int(input('Masukkan angka kedua: '))

if operatorMTK == '+':
        jumlah = num1 + num2
        print(f"Hasil dari Penjumlahan = {jumlah}")
elif operatorMTK == '-':
        jumlah = num1 - num2
        print(f"Hasil dari Pengurangan = {jumlah}")
elif operatorMTK == 'x' or operatorMTK == '*':
        jumlah = num1 * num2
        print(f"Hasil dari Perkalian = {jumlah}")
elif operatorMTK == '/' or operatorMTK == ':':
        jumlah = num1 / num2
        print(f"Hasil dari Pembagian = {jumlah}")
else:
    print('Inputan anda error')
