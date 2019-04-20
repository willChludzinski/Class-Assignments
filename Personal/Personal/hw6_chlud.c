#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>
#include <string.h>
#include <ctype.h>
#define BUFSIZE 256

int toUpper(int ch);
void main(int argc , char *argv[])
{
 int f_des[2];
 static char message[BUFSIZE];
 if(argc != 2)
 {
 fprintf(stderr, "Usage: %s message\n", *argv);
 exit(1);
 }
 if(pipe(f_des) == -1) /* generate the pipe */
 {
 perror("Pipe");
 exit(2);
 }
 switch(fork())
 {
 case -1: perror("Fork");
 exit(3);
 case 0:
 close(f_des[1]); /* In the child */
 if(read(f_des[0], message, BUFSIZE) != -1)
 {
	message = toUpper(*message);
 printf("Message received by child: [%s]\n", message);
 fflush(stdout);
 }
 else
 {
 perror("Read");
 exit(4);
 }
 break;
 default: /* In the parent */
 close(f_des[0]);
 if(write(f_des[1], argv[1], strlen(argv[1])) != -1)
 {
 printf("Message sent by parent: [%s]\n", argv[1]);
 fflush(stdout);
 }
 else
 {
 perror("Write");
 exit(5);
 }
 }
 exit(0);
}

int toupper(int ch){
 char *str=”this is a string”;
 length=strlen(str);
 for(i=0; i<length; i++)
 {
 str[i]=toupper(str[i]);
 }
 return ch;
 }

