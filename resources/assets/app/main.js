import React from 'react';
import {render} from 'react-dom';
import AccountStatement from './account/AccountStatement';

if(typeof $("#account-statement").prop('tagName') !== typeof undefined)
render(<AccountStatement />, document.getElementById('account-statement'));

