## Implementation

   Command endpoint takes the files list as arguments and fix the formatting. All configurations can be modified.
  Each step code style can be defined independently based on keywords (`And`, `Then`, `Scenario` etc).

### Code style
- All step keywords and tables (_symbol_:`|`) are right-aligned (_Except_ `Scenario`, `Feature`, `Background` _and_ `Examples`).
- All extra spaces inside table cells are deleted
- Table column width is determined by the longest cell in that column.

Initially
![Screenshot from 2019-10-04 14-51-36](https://user-images.githubusercontent.com/52429111/66236609-87e7d800-e6b8-11e9-91fb-5dcd11bedb1f.png)

After fixed
![Screenshot from 2019-10-04 15-07-23](https://user-images.githubusercontent.com/52429111/66236682-c41b3880-e6b8-11e9-90c9-fd66333f7158.png)

### Known issues:
- Extra newlines are not deleted.
- Doesn't check newline end the end of the file.
- Doesn't remove extra spaces inside steps other than table row steps.
- Commented table step makes the table to be recognized as 2 separate tables.

### Usage:
  
    gherkin-fixer /path/to/test1.feature /path/to/test2.feature ...
    
### Dependencies
- PHP >= 7.1.0