import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { IndexComponent } from './pages/index/index.component';
import { UserComponent } from './pages/user/user.component';
import { MainComponent } from './pages/main/main.component';

const routes: Routes = [
    {path: '', pathMatch: 'full', redirectTo: 'index'},
    {path: 'index', component: IndexComponent},
    {path: 'user', component: UserComponent},
    {path: 'main', component: MainComponent}
];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
})

export class AppRoutingModule {}

export const routingComponents = [
    IndexComponent,
    UserComponent,
    MainComponent
];