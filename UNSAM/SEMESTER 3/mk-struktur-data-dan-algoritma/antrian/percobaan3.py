class Node:
    def __init__(self, item):
        self.Item = item
        self.link = None

class Queue:
    def __init__(self):
        self.Front = None
        self.Rear = None

def Tambah(Q, y):
    ptr = Node(y)
    if Q.Front is None:
        Q.Front = Q.Rear = ptr
    else:
        Q.Rear.link = ptr
        Q.Rear = ptr

def Hapus(Q):
    if Q.Front is None:
        print("\n\n\t\tAntrian Kosong\n\n")
        return 0
    else:
        num = Q.Front.Item
        Q.Front = Q.Front.link
        if Q.Front is None:
            Q.Rear = None
        return num

def Tampil(N):
    print("\nFront -> ", end="")
    while N is not None:
        if N.link is None:
            print(f"{N.Item:5}", end="")
            print(" <- Rear")
        else:
            print(f"{N.Item:5}", end="")
        N = N.link

def Count(N):
    c = 0
    while N is not None:
        N = N.link
        c += 1
    return c

if __name__ == "__main__":
    item = 0
    Q = Queue()
    Q.Front = Q.Rear = None

    Tambah(Q, 11)
    Tambah(Q, 12)
    Tambah(Q, 13)
    Tambah(Q, 14)
    Tambah(Q, 15)
    Tambah(Q, 16)
    Tambah(Q, 17)

    Tampil(Q.Front)
    print("\nJumlah data pada antrian :", Count(Q.Front))

    item = Hapus(Q)
    print("\nNilai yang dihapus :", item)

    item = Hapus(Q)
    print("\nNilai yang dihapus :", item)

    item = Hapus(Q)
    print("\nNilai yang dihapus :", item)

    Tampil(Q.Front)
    print("\nJumlah data pada antrian :", Count(Q.Front))
