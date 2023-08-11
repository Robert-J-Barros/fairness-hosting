import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { PagesComponent } from './pages.component';
import { UserAuthGuard } from '../services/guards/user-auth.guard';
import { DashboardComponent } from './dashboard/dashboard.component';
import { LoginComponent } from './login/login.component';

const routes: Routes = [
  {
    path: 'pages',
    component: PagesComponent,
    children: [
      { path: 'dashboard', component: DashboardComponent, canActivate: [] },
      // {
      //   path: 'influencers',
      //   component: InfluencersComponent,
      //   canActivate: [UserAuthGuard],
      //   children: [
      //     { path: '', redirectTo: 'list', pathMatch: 'full' },
      //     { path: 'list', component: InfluencersListComponent },
      //     { path: 'detail', component: InfluencersDetailComponent },
      //     { path: 'detail/:_id', component: InfluencersDetailComponent },
      //   ],
      // },
    ]
  }
]

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class PagesRoutingModule { }
