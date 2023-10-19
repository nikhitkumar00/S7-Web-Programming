while (true) {
	let userInput = prompt("Enter a five-digit integer:");

	if (userInput === null) {
		break;
	}

	if (userInput.length !== 5 || isNaN(userInput)) {
		alert("Invalid input. Please enter a five-digit integer.");
		continue;
	}

	if (str === str.reverse()) {
		alert(userInput + " is a palindrome!");
	} else {
		alert(userInput + " is not a palindrome.");
	}
}
