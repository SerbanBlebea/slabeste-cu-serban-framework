import validator from 'validator';
import { disableButton,
    enableButton } from './src/manipulate/form.js';
import { validateName, validateEmail } from './src/validate/validate.js';
import { setLocal, getLocal, removeLocal } from './src/store/storeLocal.js';
import { getQuery,
    getRoot,
    getPathString,
    getPathArray,
    getRealPathArray } from './src/tracking/url.js';
import { run, toServer } from './src/tracking/tracking.js';

function isWorking()
{
    let message = 'Landing Page bundle is set and working';
    console.log(message)
    return message;
}

run();
isWorking();

export {
    setLocal,
    getLocal,
    removeLocal,
    isWorking,
    disableButton,
    enableButton,
    validateName,
    validateEmail,
    getQuery,
    getRoot,
    getPathString,
    getPathArray,
    getRealPathArray,
    run,
    toServer
}