<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\FormsComponent;
use App\Models\Store;
use App\Models\Shift;


class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'User';

    protected static ?string $navigationGroup = 'User Management';




    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Username')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->label('Password')
                    ->required()
                    ->password()
                    ->maxLength(255),
                // Forms\Components\Select::make('stores')
                //     ->label('Stores')
                //     ->relationship('stores', 'name')
                //     ->multiple()
                //     // ->preload() // Optional: Preload options for better performance
                //     ->searchable(),
                    Forms\Components\CheckboxList::make('user_stores')
                    ->label('Stores')
                    ->relationship('stores', 'id')
                    ->columns(2) // Optional: display checkboxes in 2 columns
                    ->options(Store::all()->pluck('store_name', 'id')->toArray()),
                    Forms\Components\CheckboxList::make('user_shifts')
                    ->label('Shifts')
                    ->relationship('shifts', 'id')
                    ->columns(2) // Optional: display checkboxes in 2 columns
                    ->options(Shift::all()->pluck('shift_name', 'id')->toArray()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('stores')
                ->label('Stores')
                ->formatStateUsing(function ($record) {
                    return $record->stores->pluck('store_name')->implode(', ');
                }),
                TextColumn::make('shifts')
                ->label('Shifts')
                ->formatStateUsing(function ($record) {
                    return $record->shifts->pluck('shift_name')->implode(', ');
                }),

                TextColumn::make('first_name')
                    ->label('first_name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('last_name')
                    ->label('last_name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name')
                    ->label('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('phone')
                    ->label('phone')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('position')
                    ->label('position')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('hire_date')
                    ->label('hire_date')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('is_admin')
                    ->label('is_admin')
                    ->searchable()
                    ->sortable(),
                

            ])
            ->filters([
                // Define your filters here
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
            // Define any related resources here
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
