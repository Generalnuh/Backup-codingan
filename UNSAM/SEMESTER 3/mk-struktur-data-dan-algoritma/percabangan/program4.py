nilai = int(input('Input nilai anda: '))

if nilai >= 90:
    grade = "Selamat danda mendapat grade A"
elif nilai >= 80:
    grade = "Selamat danda mendapat grade B+"
elif nilai >= 70:
    grade = "Selamat danda mendapat grade B"
elif nilai >= 60:
    grade = "Selamat danda mendapat grade C+"
elif nilai >= 50:
    grade = "Selamat danda mendapat grade C"
elif nilai >= 40:
    grade = "Selamat danda mendapat grade D"
else:
    grade = 'Anda Tidak lulus'

print("Hasil: %s" % grade)