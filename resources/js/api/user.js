import axios from 'axios';

export const getUsers = async () => {
  console.log('Trying to get list of users');
  
  axios
  .get(`https://weekwithwanda.com/api/user`)
  .then(response => {
    console.log(response);
    return response;
  })
  .catch(error => {
    console.log(`An Error Occured! ${error}`);
  });
  
//   axios
//     .get(`https://weekwithwanda.com/api/users/list?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL3dlZWt3aXRod2FuZGEuY29tL2FwaS91c2VyL3JlZ2lzdGVyIiwiaWF0IjoxNTUwNjY4Mzk0LCJleHAiOjE1NTA2NzE5OTQsIm5iZiI6MTU1MDY2ODM5NCwianRpIjoiZXJ6UnZFY1RZUXMzaXZldCIsInN1YiI6MTMsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.WHpcrX10bkSGspyjmjd8vOTiHptGuJSRTmk0MUcgdfs`)
//     .then(response => {
//       console.log(response);
//       return response;
//     })
//     .then(json => {
//       if (json.data.success) {
// //         this.setState({ users: json.data.data });
//         console.log(json.data.data);
//       } else {
//         console.log("Failed getting list of users");
//       }
//     })
//     .catch(error => {
//       console.log(`An Error Occured! ${error}`);
//     });
};
