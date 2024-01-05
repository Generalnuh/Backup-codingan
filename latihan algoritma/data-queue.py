from collections import deque

class Queue:
    def __init__(self):
        self.items = deque()

    def enqueue(self, item):
        self.items.append(item)

    def dequeue(self):
        return self.items.popleft()

    def is_empty(self):
        return len(self.items) == 0
    
# Membuat objek antrian
my_queue = Queue()

# Menambahkan elemen ke dalam antrian
my_queue.enqueue(10)
my_queue.enqueue(20)
my_queue.enqueue(30)

# Mengecek apakah antrian kosong
print("Apakah antrian kosong?", my_queue.is_empty())  # Output: False

# Menghapus dan mencetak elemen dari bagian depan antrian
print("Elemen dari bagian depan antrian:", my_queue.dequeue())  # Output: 10

# Mengecek apakah antrian kosong setelah operasi dequeue
print("Apakah antrian kosong?", my_queue.is_empty())  # Output: False
