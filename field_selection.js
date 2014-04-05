Story
//What if we only want a few specific fields returned for the populated documents? This can be accomplished by passing the usual field name syntax as the second argument to the populate metho


.findOne({ title: /timex/i })
.populate('_creator', 'name') // only return the Persons name
.exec(function (err, story) {
  if (err) return handleError(err);
  
  console.log('The creator is %s', story._creator.name);
  // prints "The creator is Aaron"
  
  console.log('The creators age is %s', story._creator.age);
  // prints "The creators age is null'
})