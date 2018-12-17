# faq
 
 To run the FAQ project:
 
 1: git clone https://github.com/krr39/faq.git
 2:CD into FAQ and run composer install
 3: cp .env.example to .env
 4: setup database / with sqlite or other (https://laravel.com/docs/5.6/database)
 
Epic:

Test 1: Unit test to check the question weightage field (first textbox of calculator) is integer
Test 2: Unit test to check the no of question field is integer
Note: see calculatorTest.php

Test 3: Unit test to inserting tag and question  in question form (QuestionTest.php)
Test 4: Test to check the status of calculator page is 200 or not ( ExampleText.php)

I have added 1 feature which is not in the syllabus and 1 design page and 1 additional field in Question page.

UserStory 1: Calculator

Steps to perform:
1: Register or Login to the project (login to twila.hintz@example.net or hershel66@example.org and password will be “secret”)

2: You will be redirect to home page
3: Click on calculator 
4: Through your mouse/Keyboard add one integer value in 1st textbox
5: Click on + button through mouse (Note: you can do any operation +,-,/,*)
6: Same way add 2nd integer value into the 2nd textbox
7: Click on = button to see the result of operation of two number
8: Click on C button to clear both textbox


User Story 2: Slide the calculator up and down by clicking Calculator button
1: Click on Calculator button which on top the page to slide up the calculator.
2: Click on the same to reopen the calculator

User Story 3: Feature Tag:
1: Register or Login to the project
2: You will be redirect to home page
3: Click on create question
4: Add question and tag (add tag with # the way we do on Facebook status)
5: Add Question
6: Go to last page
7: you will see your question and the tag at footer of the question panel.


User Story 4: Home page:
Click on next to see the next images and read the question and answer present over the slide images.
