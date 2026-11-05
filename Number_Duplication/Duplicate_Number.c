#include <stdio.h>
#include <stdlib.h>
#include <string.h>

// Bubble Sort Function
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

    // PHP se aayi poori string ko space/comma se todkar array mein dalna
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

    // Step 1: Sort the array
    Bubble_Sort(arr, n);

    // Step 2: Check duplicates
    int found = 0;
    printf("<b>Total numbers entered: %d</b><br><br>", n);

    for (int i = 0; i < n; i++) {
        int count = 1;
        while (i < n - 1 && arr[i] == arr[i + 1]) {
            count++;
            i++;
        }
        if (count > 1) {
            printf("Number <b>%d</b> total <b>%d</b> baar repeat hua hai.<br>", arr[i], count);
            found = 1;
        }
    }

    if (!found) {
        printf("Great! Koi bhi number repeat nahi hua hai.<br>");
    }

    return 0;
}