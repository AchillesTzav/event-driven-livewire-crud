## About The Project

This is a basic CRUD application utilizing Livewire componets communicating with each other with events. This way we can achieve separation of concerns keeping each component responsible for specific actions and open for extension which as a result we will get: 
  - clarity in our code,
  - modular design
  - scalablity and stability 

Current structure: 

- BookPage.php - Parent component managing the overall page and handling interactions between subcomponents. 
  - BookTable.php  - Displays a list of books in a table format.
  - BookCreate.php - Uses the form class to create a new book and dispatches events to the other components.
  - BookUpdate.php - Manages the update form for modifying existing book records using the form class.
  - BookShow.php - Presents detailed information about a selected book.
  - BookUploadImage.php - Manages image uploads related to book entries.
- Forms
  - BookForm.php - extracting a form object into a separate class

The above structure is shared to the view files.
