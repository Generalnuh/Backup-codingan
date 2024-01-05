class Stack:
    def __init__(self):
        self.items = []

    def push(self, item):
        self.items.append(item)

    def pop(self):
        return self.items.pop()

    def is_empty(self):
        return len(self.items) == 0

# Membuat objek stack
my_stack = Stack()

# Menambahkan elemen ke dalam stack
my_stack.push(10)
my_stack.push(20)
my_stack.push(30)

# Mengecek apakah stack kosong
print("Apakah stack kosong?", my_stack.is_empty())  # Output: False

# Menghapus dan mencetak elemen teratas stack
print("Elemen teratas stack:", my_stack.pop())  # Output: 30

# Mengecek apakah stack kosong setelah operasi pop
print("Apakah stack kosong?", my_stack.is_empty())  # Output: False
