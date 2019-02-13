import axios from 'axios';

export default axios.create({
  baseURL: '/botman',
  headers: {
//     Authorization: 'Client-ID '
  }
});
