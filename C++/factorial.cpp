#include <iostream>

// Function to compute factorial using recursion
int factorial(int n) {
    // Base case: 0! = 1! = 1
    if (n == 0 || n == 1) {
        return 1;
    }
    // Recursive case: n! = n * (n-1)!
    else {
        return n * factorial(n - 1);
    }
}

int main() {
    int number;
    
    // Prompt the user to enter a number
    std::cout << "Enter a number: ";
    std::cin >> number;
    
    // Compute and display the factorial of the number
    std::cout << "Factorial of " << number << " is " << factorial(number) << std::endl;
    
    return 0;
}
