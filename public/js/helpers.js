// Namespace for Helper functions
var Helper = Helper || {};

// Pad zeroes to the left
Helper.lpad = function (number, size, symbol) 
{
  	number = number.toString();
  	while (number.length < size) 
		{
			number = symbol + number;
		}

  	return number;
}

// Pad zeroes to the right
Helper.rpad = function (number, size, symbol) 
{
  	number = number.toString();
  	while (number.length < size) 
		{
			number = number + symbol;
		}

  	return number;
}

