class Node:
    def __init__(self, nomor_mobil):
        self.nomor_mobil = nomor_mobil
        self.next = None

class tempatParkir:
    def __init__(self, kapasitas):
        self.kapasitas = kapasitas
        self.array_parkir = [None] * kapasitas
        self.linked_list_parkir = None

    def mobil_masuk(self, nomor_mobil):
        if None in self.array_parkir:
            empty_spot = self.array_parkir.index(None)
            self.array_parkir[empty_spot] = nomor_mobil
        else:
            new_node = Node(nomor_mobil)
            new_node.next = self.linked_list_parkir
            self.linked_list_parkir = new_node

    def mobil_paling_depan_keluar(self):
        if self.linked_list_parkir:
            removed_node = self.linked_list_parkir
            self.linked_list_parkir = removed_node.next
            return removed_node.nomor_mobil
        elif None in self.array_parkir:
            empty_spot = self.array_parkir.index(None)
            return self.array_parkir.pop(empty_spot)
        else:
            return None

    def mobil_tengah_keluar(self):
        if self.linked_list_parkir:
            current_node = self.linked_list_parkir
            prev_node = None
            while current_node.next:
                prev_node = current_node
                current_node = current_node.next
            if prev_node:
                prev_node.next = None
                return current_node.nomor_mobil
            else:
                self.linked_list_parkir = None
                return current_node.nomor_mobil
        elif None in self.array_parkir:
            empty_spot = self.array_parkir.index(None)
            return self.array_parkir.pop(empty_spot)
        else:
            return None

    def tampilkan_tempat_parkir(self):
        print("Tempat Parkir (Array):", self.array_parkir)
        print("Tempat Parkir (Linked List):", end=" ")
        current_node = self.linked_list_parkir
        while current_node:
            print(current_node.nomor_mobil, end=" -> ")
            current_node = current_node.next
        print("None")


tempat_parkir = tempatParkir(kapasitas=5)

tempat_parkir.mobil_masuk("BK6666")
tempat_parkir.mobil_masuk("BL6666")
tempat_parkir.mobil_masuk("BL6667")

tempat_parkir.tampilkan_tempat_parkir()

mobil_keluar = tempat_parkir.mobil_paling_depan_keluar()
print(f"Lahan Mobil keluar: {mobil_keluar}")

tempat_parkir.tampilkan_tempat_parkir()

mobil_keluar = tempat_parkir.mobil_tengah_keluar()
print(f"Mobil keluar: {mobil_keluar}")

tempat_parkir.tampilkan_tempat_parkir()
