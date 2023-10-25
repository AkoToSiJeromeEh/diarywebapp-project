//input fields
const titleInput = document.getElementById("title-input");
const categoryInput = document.getElementById("category-input");
const dateInput = document.getElementById("date-input");
const textareaInput = document.getElementById("textarea-input");

//text fields
const titleText = document.getElementById("title-text");
const categoryText = document.getElementById("category-text");
const dateText = document.getElementById("date-text");
const descriptionText = document.getElementById("description-text");

// Count functions
const startCount = document.getElementById("start-count"); // Get the startCount element
const maxCount = document.getElementById("max-count"); // Get the maxCount element
const countContainer = document.getElementById("count-container"); // Get the countContainer element
const btnSubmit = document.getElementById("btn-submit"); // Get the submit button element

let count = 0; // Initialize a count variable to store the textarea value
let maxcount = 0; // Initialize a maxcount variable to store the maximum number of characters, which is based on the category input since MySQL database has character limits of 255 - 1000 characters.

// Function to render the count in the startCount element
const renderStartedCount = (content, value) => (content.innerHTML = value);

// Function to enable or disable the submit button
const isButtonDisabled = (condition) => (btnSubmit.disabled = condition);

// Function to set the maximum value for character count
const maxValue = (value) => (maxcount = value);

// Function to apply styling for error messages
const errorStyle = (element, color, borderWidth) => {
   element.style.borderWidth = borderWidth;
   element.style.color = color;
}

// Function to handle character counting and validation
const countTrigger = (e) => {
  if (textareaInput.value.trim() !== "") { // Check if the textarea is not empty or null
    if (categoryInput.value.toLowerCase() == "featured")  maxValue(1000);  // Check if the category input is "featured"
    // Set maxcount to 1000 if the category is "featured"
    else maxValue(255); // Set maxcount to 255 if the category is not "featured"
    
    count = textareaInput.value.length;
      
    if (e.inputType === "deleteContentBackward") { // Check if the user input is a Backspace key press
      if (count > 0) { // Check if the count is greater than 0 before executing the code below, which updates the count displayed in the startCount element. We check if it's greater than 0 because we cannot decrement it below 0.
        renderStartedCount(startCount, count); // Render and update the count
        count--; // Decrement the count if it's greater than 0; otherwise, it won't decrement.
      }
    } // This checks for the Backspace key press.

    // The following condition checks if the user pressed Ctrl + A and Backspace keys simultaneously. If this condition is met, it sets the count to 0, indicating that the user intends to delete all content.
    else if (e.ctrlKey && e.key === 'a' && e.key === 'Backspace') {
      renderStartedCount(startCount, count); // Render and update the count
      count = 0; // Set the count to 0 if the condition is met (Ctrl + A + Backspace).
    } 
    else { // If none of the previous conditions are met, this block of code is executed.
      if (count >= maxcount) { // Check if the count is greater than or equal to the maxcount; if true, it indicates the user has reached the maximum character limit, and the submit button is disabled to prevent exceeding the limit.
        renderStartedCount(startCount, "Max Number Reached! You cannot submit this"); // Render an error message
        errorStyle(countContainer, "red", "10px"); // Apply error styling
        isButtonDisabled(true); // Disable the submit button
      } else { // If the count is not greater than the maxcount, reset the display as follows.
        renderStartedCount(startCount, count); // Render and update the count
        errorStyle(countContainer, "black", "2px"); // Remove error styling
        isButtonDisabled(false); // Enable the submit button
      }
     
    }
    // Update and render the max character count.
    renderStartedCount(maxCount, maxcount);
  } 
  // If the textarea is empty, set the startCount to 0.
  else  renderStartedCount(startCount, 0);
};

textareaInput.addEventListener("input", countTrigger); // Add an input event listener that triggers when the user inputs into our textarea.




const getInputValue = () => {
  titleText.textContent = titleInput.value;
  categoryText.textContent = categoryInput.value;
  dateText.textContent = dateInput.value;
  descriptionText.textContent = textareaInput.value;
};
countTrigger();
titleInput.addEventListener("change", getInputValue);
categoryInput.addEventListener("change", getInputValue);
dateInput.addEventListener("change", getInputValue);
textareaInput.addEventListener("change", getInputValue);




// Initialize the color picker

const textColorPicker = document.getElementById("text-picker");
const bgColorPicker = document.getElementById("bg-picker");
const newEntryContainer = document.getElementById("newEntryCont");

const initColorPick = () => {
  newEntryContainer.style.backgroundColor = bgColorPicker.value;
  descriptionText.style.color = textColorPicker.value;
  titleText.style.color = textColorPicker.value;
  dateText.style.color = textColorPicker.value;
  categoryText.style.color = bgColorPicker.value;
  categoryText.style.backgroundColor = textColorPicker.value;
};
textColorPicker.addEventListener("input", initColorPick);
bgColorPicker.addEventListener("input", initColorPick);

