
// How many characters in a string but not with a function?

// declaring a counter and initializing it to 0
let counter = 0;
// const is defining a variable which will stay constant
// string is the variable
// this defines the string
const string = "AABSDWAAV";
//defining the variable arrayChars
// arrayChars is the string split into characters separated
// the single quotes are what let javascript know to separate the string into characters(elements)
// the quotes can be double or single
const arrayChars = string.split('');
// . (period) allows you to user any method of the data type. In this the method is forEach.
// using the method forEach that belong to the arrayChars
// () empty parameter . in this case no parameter needs to be specified because you dont need to know what parameter it is.
// because we are not doing anything with the characters, just counting them.
arrayChars.forEach(()=>counter++);

console.log("Result is " + counter);


// How many characters in the string are vowels?
let counter = 0;

const string = "AABSDWAAV";

const arrayChars = string.split('');
// => return value
arrayChars.forEach((current) =>
	{
		// stating a condition to evaluate the statement
		// the condition will determine if the statement is or is not executed
		if(current === 'A' || current === 'E' || current === 'I' || current === 'O' || current === 'U' )
			counter++

	}
)
console.log('Result = ', counter);


// How many characters in the string are vowels? Count upper and lowercase.

let counter = 0;

const string = "AABSDWAAVaEe";

const arrayChars = string.split('');
// => return value
arrayChars.forEach((currentCharacter) =>
	{
		var upperCharacter = currentCharacter.toUpperCase();
		if(upperCharacter === 'A' || upperCharacter === 'E' || upperCharacter === 'I' || upperCharacter === 'O' || upperCharacter === 'U' )
			counter++
	}
)
console.log('Result = ', counter);


