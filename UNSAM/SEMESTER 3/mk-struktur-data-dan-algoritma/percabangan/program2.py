totalBelanja = input('Total Belanja:Rp. ')
bayar = int(totalBelanja)

if int(totalBelanja) > 100000:
    print('Selamat Karena Belanja > Rp.100.000 Anda mendapat voucher makan ')
    print('Dan Diskon 5%')

    diskon = int(totalBelanja) * 5 / 100
    bayar = int(totalBelanja) - diskon

print("Total yang harus dibayar: Rp %s" %bayar)
print("Terimakasih sudah berbelanja di toko kami")
print("kami Tunggu kunjungan anda Selanjutnya")