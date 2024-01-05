def aboutme():
  print('Created by GeneralNoeh 2019')
  print('Email: muhammadnuh624@gmail.com')
  print('-'*33)
aboutme()

def nama(input_nama):
  print('Selamat datang ' + input_nama)
  print('Semoga anda hoki selalu')
nama('Muhammad Nuh')  

def nama_buah(*nama):
  print('Daftar Buah yang ingin mamah beli: ')
  for buah in nama:
    print(f'- {buah}')
nama_buah("kelengkeng", "langsat", "jambu", "nanas")

# contoh dengan argumen default
def nama(pesan, ucapan="Selamat"):
  print(ucapan, pesan)
nama("Nuh")
nama("Muhammad", "Apa kabar")

# contoh dengan perhitungan geometri

def luas(panjang,lebar):
  return panjang * lebar

panjang = int(input('Panjang: '))
lebar = int(input('Lebar: '))
print("Luas = " + str(luas(panjang,lebar)))
# print(f"Luas = {luas(panjang,lebar)}")

# contoh degan percabangan
def shw_menu():
  print("\n")
  print("---------Menu---------")
  print("[1] Show data")
  print("[2] Insert data")
  print("[3] Edit data")
  print("[4] Delete data")
  print("[5] Exit")

  menu = int(input("PILIH MENU > "))
  print("\n")

  if menu == 1:
    print('PILIH SUBMENU 1')
  elif menu == 2:
    print('PILIH SUBMENU 2')
  elif menu == 3:
    print('PILIH SUBMENU 3')
  elif menu == 4:
    print('PILIH SUBMENU 4')
  elif menu == 5:
    exit()
  else:
    print('salah input')
shw_menu()