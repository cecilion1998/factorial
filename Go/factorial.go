package main

import (
	"fmt"
)

func main() {
	num := 7
	fmt.Printf("%d\n", factorial(num))
}

func factorial(n int) int {
	if n == 0 {
		return 1
	} else {
		return factorial(n-1) * n
	}
}
