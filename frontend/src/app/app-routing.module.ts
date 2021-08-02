import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './components/home/home.component';
import { InfoComponent } from './components/info/info.component';
import { ProductsComponent } from './components/products/products.component';

const routes: Routes = [
  {
    path: '', component: HomeComponent
  },
  {
    path: 'inicio', component: HomeComponent
  },
  {
    path: 'info', component: InfoComponent
  },
  {
    path: 'products', component: ProductsComponent
  },
  {
    path: '**', component: HomeComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
