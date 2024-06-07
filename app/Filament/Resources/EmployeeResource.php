<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('store_id')
                ->label('store_id')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('first_name')
                ->label('first_name')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                ->label('last_name')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('email')
                ->label('email')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                ->label('phone')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('position')
                ->label('position')
                ->required()
                ->maxLength(255),
                Forms\Components\DatePicker::make('hire_date')
                ->label('hire_date')
                ->required(),
                Forms\Components\Checkbox::make('is_admin')
                ->label('is_admin')
                ->required(),         
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
