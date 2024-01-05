# Percobaan 1 Implementasi struktur data antrian (queue) menggunakan bahasa pemrograman Python
MAX = 10

class Queue:
    def __init__(self):
        self.Item = [0] * MAX
        self.Front = -1
        self.Rear = -1
        self.Count = 0

def Inisialisasi(q):
    q.Front = q.Rear = -1
    q.Count = 0

def Tambah(q, item):
    if q.Rear == MAX - 1:
        print("\nAntrian Penuh")
        return

    q.Rear += 1
    q.Item[q.Rear] = item
    q.Count += 1
    if q.Front == -1:
        q.Front = 0

def Hapus(q):
    if q.Front == -1:
        print("\nAntrian Kosong")
        return None

    data = q.Item[q.Front]
    q.Count -= 1
    if q.Front == q.Rear:
        q.Front = q.Rear = -1
    else:
        q.Front += 1

    return data

def Tampil(q):
    for i in range(q.Count):
        print("\nData :", q.Item[i])

if __name__ == "__main__":
    q = Queue()
    data = 0

    Inisialisasi(q)
    Tambah(q, 11)
    Tambah(q, 12)
    Tambah(q, 13)
    Tambah(q, 14)
    Tambah(q, 15)
    Tambah(q, 16)
    Tambah(q, 17)
    Tambah(q, 18)
    Tambah(q, 19)
    Tambah(q, 20)
    Tambah(q, 21)

    Tampil(q)

    data = Hapus(q)
    print("\nHapus Item =", data)

    data = Hapus(q)
    print("\nHapus Item =", data)

    data = Hapus(q)
    print("\nHapus Item =", data)

    Tampil(q)
