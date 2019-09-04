class AppStorage
{
    storeToken(token){
        localStorage.setItem('umkm-token', token);
    }
    storeUser(user){
        localStorage.setItem('umkm-user', user);
    }

    storeName(name){
        localStorage.setItem('Owner', JSON.parse(name));
    }

    storeCompany(company){
        localStorage.setItem('Company', JSON.parse(company))
    }

    store(user,token){
        this.storeToken(token);
        this.storeUser(user);
    }

    getInfo(name,company){
        this.storeName(name);
        this.storeCompany(company);
    }

    clear(){
        localStorage.removeItem('umkm-token');
        localStorage.removeItem('umkm-user');
        localStorage.removeItem('Owner');
        localStorage.removeItem('Company');
    }

    getToken(){
        return localStorage.getItem('umkm-token');
    }
    getUser(){
        let user = localStorage.getItem('umkm-user');
        return JSON.parse(user);
    }

}

export default AppStorage = new AppStorage();