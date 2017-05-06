import { Injectable } from '@angular/core';
import { Http, Headers, RequestOptions } from '@angular/http';
import { Observable } from 'rxjs/Observable';

import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';
import 'rxjs/add/observable/throw';

@Injectable()
export class IndexService {
    private apiUrl = '/sharedBundles/frontend/web/index.php?r=site%2Ftariffs';
    constructor(private http: Http) {}

    getAllTariffs() {
        return this.http.get(this.apiUrl)
            .map(res => res.json())
            .catch(this.handleError);
    }

    private handleError(error: any) {
        console.error('Erorr', error);
        return Observable.throw(error.message || error);
    }
}