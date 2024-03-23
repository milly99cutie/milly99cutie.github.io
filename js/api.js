const main = async () => {
  const results = await fetch('https://api.ipdata.co?api-key=8c4c8f0452e9cc225ccee1c5e2996d2281f5ec914be094c6b7168504');
  
  // Variable that stores the data as a Json file.
  const data = await results.json();
  // City extracted from Json file.
  const city = data.city; 
  const country = data.country;

  document.getElementById("city").innerHTML = city;
  document.getElementById("cityFooter").innerHTML = city;

}

main();
  

