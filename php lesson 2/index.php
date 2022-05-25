<!-- Task 1 -->
<?php
function past($h, $m, $s) {
  return $h * 3600000 + $m * 60000 + $s * 1000;
}



////////////////////////////////////////////////////////////////////////////////////// Task 3

function createPhoneNumber(numbers){
  var format = "(123) 456-7890"
  
  for(var i = 0; i < numbers.length; i++)
  {
    format = format.replace('x', numbers[i]);
  }
  
  return format;
}


////////////////////////////////////////////////////////////////////////////////////////Task 4

var list1 = [
  { firstName: 'Noah', lastName: 'M.', country: 'Switzerland', continent: 'Europe', age: 19, language: 'C' },
  { firstName: 'Anna', lastName: 'R.', country: 'Liechtenstein', continent: 'Europe', age: 52, language: 'JavaScript' },
  { firstName: 'Ramon', lastName: 'R.', country: 'Paraguay', continent: 'Americas', age: 29, language: 'Ruby' },
  { firstName: 'George', lastName: 'B.', country: 'England', continent: 'Europe', age: 81, language: 'C' },
];

function countLanguages(list) {
  var result = {}
  for(var i=0;i<list.length;i++){
    if(result[list[i].language]==undefined){
      result[list[i].language]=1
      } else {
      result[list[i].language]++
      }
     } 
  return result
}

Test:

var list1 = [
  { firstName: 'Noah', lastName: 'M.', country: 'Switzerland', continent: 'Europe', age: 19, language: 'C' },
  { firstName: 'Anna', lastName: 'R.', country: 'Liechtenstein', continent: 'Europe', age: 52, language: 'JavaScript' },
  { firstName: 'Ramon', lastName: 'R.', country: 'Paraguay', continent: 'Americas', age: 29, language: 'Ruby' },
  { firstName: 'George', lastName: 'B.', country: 'England', continent: 'Europe', age: 81, language: 'C' },
];

describe('countLanguages', function(){
  it('should an object which includes the count of each coding language ', function(){
    expect(countLanguages(list1)).toEqual({ C: 2, JavaScript: 1, Ruby: 1 })
  })
})



////////////////////////////////////////////////////////////////////////////////////// Task 5


function likes(names) {
  names = names || [];
  switch(names.length){
    case 0: return 'no one likes this'; break;
    case 1: return names[0] + ' likes this'; break;
    case 2: return names[0] + ' and ' + names[1] + ' like this'; break;
    case 3: return names[0] + ', ' + names[1] + ' and ' + names[2] + ' like this'; break;
    default: return names[0] + ', ' + names[1] + ' and ' + (names.length - 2) + ' others like this';
  }
}

////////////////////////////////////////////////////////////////////////////////////////////











function likes (names) {
  if (names.length === 0) {
    return 'no one likes this';
  } else if (names.length === 1) {
    return `${names[0]} likes this`;
  } else if (names.length === 2) {
    return `${names[0]} and ${names[1]} like this`;
  } else if (names.length === 3) {
    return `${names[0]}, ${names[1]} and ${names[2]} like this`;
  } else if (names.length > 3) {
    return `${names[0]}, ${names[1]} and ${names.length - 2} other like this`;
  }}