var aaron = new Person({ _id: 0, name: 'Aaron', age: 100 });

aaron.save(function (err) {
  if (err) return handleError(err);
  
  var story1 = new Story({
    title: "Once upon a timex.",
    _creator: aaron._id    // assign the _id from the person
  });
  
  story1.save(function (err) {
    if (err) return handleError(err);
    // thats it!
  });
})