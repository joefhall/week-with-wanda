import { createStore } from 'redux';
import { reduxBatch }  from '@manaflair/redux-batch';

import reducers from '../reducers';

export default createStore(reducers, reduxBatch);
