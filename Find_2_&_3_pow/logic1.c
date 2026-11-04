#include<stdlib.h>
#include<conio.h>
#include<stdio.h>
#include <string.h>
#include<math.h>
void math(char a[])
{ 
    double sum=0;
    printf("Your Number Is Recive <br>");
    char *token=strtok(a," ,");
    while (token !=0)
    {
        printf(" Nmber Is %s <br>",token);
        double num=atof(token);
        double result=pow(num,3);
        printf("Value IS %lf <br><br>",result);
        sum=sum+result;
        token = strtok(NULL, " ,");
    }
    printf(" Total Sum Is %lf <br>",sum);    
}
int main(int argc,char *argv[])
{

    if(argc>1)
    { 
        char arr[100];
        strcpy(arr,argv[1]);
        math(arr);
    }
    return 0;
}