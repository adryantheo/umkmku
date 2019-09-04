import AppStorage from './AppStorage'

class User {
    login(data){
        return axios.post('/api/login', data, {
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json',
            }
        })
    }
        
    signup(data){
        return axios.post('/api/register', data, {
            headers: {
                'Accept': 'application/json',
                'Content-type': 'application/json',
            }
        })
    }

    storeSession(data) {
        return new Promise((resolve, reject) => {
            const user = JSON.stringify(data.user);
            const token = data.token;
            const name = JSON.stringify(data.user.name)
            const company = JSON.stringify(data.user.company_name)
            AppStorage.store(user,token);
            AppStorage.getInfo(name,company);
            resolve();
        })
    }

    loggedIn(){
        const storedToken = AppStorage.getToken();
        if(!!storedToken){
            return true;
        } else {
            return false;
        }
    }

    getToken() {
        const storedToken = AppStorage.getToken();
        return storedToken;
    }

    logout(){
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                resolve();
            }, 500);
        })
    }
    
    clearStorage() {
        AppStorage.clear();
    }

    info(){
        if(this.loggedIn){
            return AppStorage.getUser();
        }
        return console.log("please login first");
    }

    updateInfo() {
        return new Promise((resolve, reject) => {
            if(this.loggedIn) {
                axios.post('/api/auth/me', {
                    token: AppStorage.getToken()
                }, {
                    headers: {
                        'Accept': 'application/json',
                        'Content-type': 'application/json'
                    }
                }).then(res => {
                    if (res.data.auth) {
                        AppStorage.storeUser(JSON.stringify(res.data.user));
                        resolve("update success");
                    } else {
                        reject("User update went wrong");
                    }
                }).catch(err => {
                    reject(err);
                })
            } else {
                reject("notloggedin");
            }
        })
    }
}

export default User = new User();