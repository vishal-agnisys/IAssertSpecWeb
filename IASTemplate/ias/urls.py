from django.urls import path, include
from . import views

app_name = 'ias'

urlpatterns = [
    path('', views.input, name='input'),
    path('output/', views.output, name='output'),
]
