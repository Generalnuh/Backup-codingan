print("""
=============PILH SALAH SATU================
 -   PILIHAN 1 MENGHITUNG VOLUME KUBUS    -
 -  PILIHAN 2 MENGHITUNG LUAS LINGKARAN   -
 -  PILIHAN 3 MENGHITUNG VOLUME SILINDER  -  
====TEKAN 'X' UNTUK KELUAR DARI PROGRAM=====
=============PILH SALAH SATU================
""")
pi = 3.14
ulangProgram = True

while ulangProgram:
    print("Pilih operasi yang ingin Anda lakukan:")
    opsiPilihan = input("Masukkan opsiPilihan (1/2/3/x): ")

    if opsiPilihan == '1':
        sisi = int(input("Masukkan panjang sisi kubus: "))
        volume = sisi * sisi * sisi
        print(f"Volume kubus: {volume}")
    elif opsiPilihan == '2':
        jariJari = int(input("Masukkan jari-jari lingkaran: "))
        luas = pi * (jariJari * jariJari)
        print(f"Luas lingkaran: {luas}")
    elif opsiPilihan == '3':
        jariJari = int(input("Masukkan panjang jari-jari lingkaran: "))
        tinggi = int(input("Masukkan tinggi silinder: "))
        volume = pi * (jariJari * jariJari) * tinggi
        print(f"Volume silinder: {volume}")
    elif opsiPilihan == 'x' or opsiPilihan == 'X':
        print("Anda Keluar Dari Program.")
        break
    else:
        print("Pilihan tidak valid. Silakan pilih lagi.")
        
    ulangProgram = input('Ingin Menghitung lagi? (ya/ga)')
    if ulangProgram == 'ya' or ulangProgram == 'y':
        True
    elif ulangProgram == 'ga' or ulangProgram == 'g':
        False
        print('Terimakasih :)')
        break
    else:
        break
