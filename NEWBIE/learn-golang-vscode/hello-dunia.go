package main

import "fmt"

func main(){
	person := []string{"budi","gendral","toton"}
	fmt.Println(person)
	fmt.Println(len(person))
	fmt.Println(cap(person))

	people := [...]string{"Sentosa","Sentoso","Satoso"}

	for i :=0; i < len(people);i++{
		fmt.Println(people[i])
	}
	
	for index, peoples := range(people){
		fmt.Println("index", index , "=",peoples)
	}

	nilai := 100

	if nilai >= 80 {
		fmt.Println("Wow Nilai Anda Perfect")
	} else if nilai >= 60 {
		fmt.Println("Nilai anda cukup Paten")
	} else if nilai >= 40 {
		fmt.Println("Nilai anda lumayan buruk")
	} else if nilai >= 20 {
		fmt.Println("Nilai anda buruk")
	} else {
		fmt.Println("Capek gw mah")
	}
	
}