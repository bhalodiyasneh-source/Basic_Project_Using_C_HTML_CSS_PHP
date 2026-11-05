#include <stdio.h>
#include <stdlib.h>
#include <string.h>
void Bubble_Sort(int arr[], int n) {
    int temp;
    for (int i = 0; i < n - 1; i++) {
        for (int j = 0; j < n - i - 1; j++) {
            if (arr[j] > arr[j + 1]) {
                temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    }
}
int main(int argc, char *argv[]) {
    if (argc < 2) {
        printf("No any data found\n");
        return 0;
    }
    int arr[100];
    int n = 0;
    for (int i = 1; i < argc; i++) {
        char *token = strtok(argv[i], " ,");
        while (token != NULL) {
            arr[n++] = atoi(token);
            token = strtok(NULL, " ,");
        }
    }
    if (n == 0) {
        printf("No valid numbers found\n");
        return 0;
    }
    Bubble_Sort(arr, n);
    if (n < 2) {
        printf("Sum find karne ke liye kam se kam 2 numbers hone chahiye!\n");
        return 0;
    }
    int last1 = arr[n - 1];     
    int last2 = arr[n - 2];     
    int max_sum = last1 + last2;
    printf("Max2 numbers: %d aur %d\n", last2, last1);
    printf("Max Sum: %d\n", max_sum);
    return 0;
}