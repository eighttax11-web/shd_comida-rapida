import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

const apiUrl: string = environment.apiUrl;

@Injectable({
  providedIn: 'root'
})
export class ProductsService {

  constructor(private _http: HttpClient) { }

  
}

export interface Product {
  id:          number;
  name:        string;
  description: string;
  price:       string;
  image:       string;
  created_at:  Date;
  updated_at:  Date;
}
