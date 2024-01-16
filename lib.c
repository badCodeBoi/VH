#include<stdio.h>
int main()
{

printf("---------Main menu-----------\n\n");
printf("1. Add a Book\n\n");
printf("2. Display book info\n\n");
printf("3. Search/check Books\n\n");
printf("4. Exit app\n\n");

int al;

printf("Enter : ")
scanf("%d", &a1);
printf("\n\n");

if(a1==1)
{

printf("You can add book infomations\n\n");
printf("Please pick a catagory :\n\n");
printf("1. Computers \n\n");
printf("2. Humanities\n\n");
printf("3. Electrical\n\n");
printf("4. Mechanical\n\n");
printf("---------Main menu-----------\n\n");
printf("---------Main menu-----------\n\n");
printf("---------Main menu-----------\n\n");
}
int a2;
printf("Choose a category\n\n");
scanf("%d", &a2);

printf("\n\n");

if(a2==1)
{
printf("\n\n");
printf("Please choose a computer category \n\n");
printf("1. introduction to C\n\n");
printf("2. Introduction to Phython\n");
printf("3. Introduction to R Programming\n");

int a3;
printf("Choose a book : ");
scanf("%d", &a3);

printf("\n\n");

if(a3==1)
{
printf("You have chosen Intoduction to c\n\n");
char book_namea[50];
char author_namea[50];
int pagea;
int pricea;

printf("Book name : ");
scanf("%s", &book_namea);
printf("\n\n");

printf("Author name : ");
scanf("%s", &author_namea);
printf("\n\n");

printf("Pages in book");
scanf("%d", &book_namea);
printf("\n\n");

printf("Price : ");
scanf("%d", &pricea);
printf("\n\n");
}
else if(a3==2)
{
printf("You have chosen Intoduction to Phyton\n\n");
char book_nameb[50];
char author_nameb[50];
int pageb;
int priceb;

printf("Book name : ");
scanf("%s", &book_nameb);
printf("\n\n");

printf("Author name : ");
scanf("%s", &author_nameb);
printf("\n\n");

printf("Pages in book");
scanf("%d", &book_nameb);
printf("\n\n");

printf("Price : ");
scanf("%d", &priceb);
printf("\n\n");
}
else if(a3==3)
{	
printf("You have chosen Intoduction to R programming\n\n");
char book_namec[50];
char author_namec[50];
int pagec;
int pricec;

printf("Book name : ");
scanf("%s", &book_namec);
printf("\n\n");


printf("Author name : ");
scanf("%s", &author_namec);
printf("\n\n");

printf("Pages in book");
scanf("%d", &book_namec);
printf("\n\n");

printf("Price : ");
scanf("%d", &pricec);
printf("\n\n");
}
}
else if(a2==2)
{
printf("You have chose electronics category");
printf("1. Practical electronics\n");
printf("2. Fundementals of circuits");
printf("3. 101 electronics");

int a4;
printf("Choose a book : ");
scanf("%d", &a4);
printf("\n\n");

if(a4==1)
{

printf("You have chosen Practical electronics\n\n");
char book_named[50];
char author_named[50];
int paged;
int priced;

printf("Book name : ");
scanf("%s", &book_named);
printf("\n\n");

printf("Author name : ");
scanf("%s", &author_named);
printf("\n\n");

printf("Pages in book");
scanf("%d", &book_named);
printf("\n\n");

printf("Price : ");
scanf("%d", &priced);
printf("\n\n");
}
else if(a4==2)
{
printf("You have chosen Fundamentals of circuits\n\n");
char book_namee[50];
char author_namee[50];
int pagee;
int pricee;

printf("Book name : ");
scanf("%s", &book_namee);
printf("\n\n");


printf("Author name : ");
scanf("%s", &author_namee);
printf("\n\n");

printf("Pages in book");
scanf("%d", &book_namee);
printf("\n\n");

printf("Price : ");
scanf("%d", &pricee);
printf("\n\n");
}
else if(a4==3)
{
printf("You have chosen 101 electronics\n\n");
char book_namef[50];
char author_namef[50];
int pagef;
int pricef;

printf("Book name : ");
scanf("%s", &book_namef);
printf("\n\n");

printf("Author name : ");
scanf("%s", &author_namef);
printf("\n\n");

printf("Pages in book");
scanf("%d", &book_namef);
printf("\n\n");

printf("Price : ");
scanf("%d", &pricef);
printf("\n\n");
}
}
else if(a2==3)
{
printf("You have chosen the Mechanical category\n\n");
printf("1. AutoBook\n\n");
printf("2. Love cars\n\n");
printf("3. Engine Sex\n\n");

int a5;
printf("Pick a Book : ");
scanf("%d", &a5);
printf("\n\n");

if(a5==1)
{

printf("You have chosen The AutoBook\n\n");
char book_nameg[50];
char author_nameg[50];
int pageg;
int priceg;

printf("Book name : ");
scanf("%s", &book_nameg);
printf("\n\n");


printf("Author name : ");
scanf("%s", &author_nameg);
printf("\n\n");

printf("Pages in book");
scanf("%d", &book_nameg);
printf("\n\n");

printf("Price : ");
scanf("%d", &priceg);
printf("\n\n");
}
else if(a5==2)
{

printf("You have chosen love Cars\n\n");
char book_nameh[50];
char author_nameh[50];
int pageh;
int priceh;

printf("Book name : ");
scanf("%s", &book_nameh);
printf("\n\n");


printf("Author name : ");
scanf("%s", &author_nameh);
printf("\n\n");

printf("Pages in book");
scanf("%d", &book_nameh);
printf("\n\n");

printf("Price : ");
scanf("%d", &priceh);
printf("\n\n");
}
else if(a5==3)
{

printf("You have chosen Car sex\n\n");
char book_namei[50];
char author_namei[50];
int pagei;
int pricei;

printf("Book name : ");
scanf("%s", &book_namei);
printf("\n\n");


printf("Author name : ");
scanf("%s", &author_namei);
printf("\n\n");

printf("Pages in book");
scanf("%d", &book_namei);
printf("\n\n");

printf("Price : ");
scanf("%d", &pricei);
printf("\n\n");
}
}
}
else if(a1==3)
{

printf("Search/check the book\n\n");

printf("Select the code: 123 for Introduction to C\n");
printf("Select the code: 456 for Introduction to Phython\n");
printf("Select the code: 789 for Introduction to R Programming\n");
printf("Select the code: 523 for practical electronics\n");
printf("Select the code: 759 for fundamentals of circuits\n");
printf("Select the code: 157 for 101 electronics\n");
printf("Select the code: 359 for Love Cars\n");
printf("Select the code: 153 for AutoBook\n");
printf("Select the code: 104 for Engine Sex\n");

int a6;
printf("Enter the book to search (USE THE CODE) : ");
scanf("%d", &a6);
printf("\n");

switch(a6)
{
	case 123:
	printf("Book name: Introduction to C\n\n");
	printf("Book availability: 2 copies left");
	break;
	case 456:
	printf("Book name: Introduction to Phython\n\n");
	printf("Book availability: 2 copies left");
	break;
	case 789:
	printf("Book name: Introduction to R Programming\n\n");
	printf("Book availability: 2 copies left");
	break;
	case 523:
	printf("Book name: Practical electronics\n\n");
	printf("Book availability: 5 copies left");
	break;
	case 759:
	printf("Book name: fundamentals of circuirts\n\n");
	printf("Book availability: 12 copies left");
	break;
	case 157:
	printf("Book name: 101 electronics\n\n");
	printf("Book availability: 2 copies left");
	break;
	case 359:
	printf("Book name: Love Cars\n\n");
	printf("Book availability: 7 copies left");
	break;
	case 153:
	printf("Book name: AutoBook\n\n");
	printf("Book availability: 4 copies left");
	break;
	case 104:
	printf("Book name: EngineSex\n\n");
	printf("Book availability: 2 copies left");
	break;
}
}
else if(a1==4)
{
printf("have a nice day\n\n");
}
}
}
