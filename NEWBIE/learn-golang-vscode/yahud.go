package main

import (
	"bufio"
	"fmt"
	"os"
)

func main() {
	reader := bufio.NewReader(os.Stdin)

	fmt.Print("Masukkan teks: ")
	input, _ := reader.ReadString('\n')

	fmt.Println("Anda memasukkan:", input)
}
