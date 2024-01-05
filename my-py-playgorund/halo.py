# Implementasi List didalam percabangan

listTamuVIP = ['jarot', 'grogot', 'windah', 'cendy', 'ditto', 'ilham']
check_nama = str(input('Check tamu VIP, Masukkan nama kamu? '))

if check_nama in listTamuVIP:
    print('Selamat kamu tamu VIP kami.')
    print(f"{check_nama}, adalah salah satu tamu VIP kami.")
else:
    print(f"Nama kamu, {check_nama} tidak termasuk didalam daftar kami.😜")