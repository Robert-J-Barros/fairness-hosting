import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './pages/login/login.component';
import { UserAuthGuard } from './services/guards/user-auth.guard';

const routes: Routes = [
  { path: '', redirectTo: 'pages/dashboard', pathMatch: 'full' },
  { path: 'login', component: LoginComponent },

  {
    path: 'pages',
    loadChildren: () => import('../app/pages/pages.module').then(m => m.PagesModule),
  },

  { path: '**', redirectTo: 'not-found' },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
